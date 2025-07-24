document.addEventListener("DOMContentLoaded", function() {
    let editMode = false;
    let selectedWidgetType = null;
    const container = document.querySelector('.grid-stack');
    const editButton = document.getElementById('editWidgetButton');
    const modal = document.getElementById("addWidgetModal");
    const addButton = document.getElementById("addWidgetButton");
    const closeModal = document.querySelector(".close");
    const widgetOptions = document.querySelectorAll(".widgetOption");
    const backButton = document.getElementById("backButton");

    let grid = GridStack.init({
        column: 'auto',
        cellHeight: 'initial',
        resizable: {
            handles: 'se, sw, ne, nw'
        },
        columnOpts: { breakpoints: [{w:768, c:1}] }
    });

    editButton.addEventListener('click', function() {
        editMode = !editMode;

        if (editMode) {
            editButton.textContent = "Stop Editing";
            editButton.style.backgroundColor = "rgb(44, 208, 58)";
            editButton.style.border = "solid 1px rgb(236, 236, 236)";
            editButton.style.color = "white";

            grid.setStatic(false);

            document.querySelectorAll('.grid-stack-item').forEach(widget => {
                let editBtn = document.createElement('button');
                editBtn.classList.add('editWidgetBtn');
                editBtn.innerHTML = '<i class="fa fa-pencil widgetButton"></i>';
                editBtn.style.position = 'absolute';
                editBtn.style.top = '15px';
                editBtn.style.right = '55px';
                editBtn.style.border = 'none';
                editBtn.style.background = 'transparent';
                editBtn.style.cursor = 'pointer';
                editBtn.style.fontSize = '1.2em';

                let deleteBtn = document.createElement('button');
                deleteBtn.classList.add('deleteWidgetBtn');
                deleteBtn.innerHTML = '<i class="fa fa-trash red widgetButton"></i>';
                deleteBtn.style.position = 'absolute';
                deleteBtn.style.top = '15px';
                deleteBtn.style.right = '20px';
                deleteBtn.style.border = 'none';
                deleteBtn.style.background = 'transparent';
                deleteBtn.style.cursor = 'pointer';
                deleteBtn.style.fontSize = '1.2em';

                deleteBtn.addEventListener('click', function(e) {
                    e.stopPropagation();

                    if (confirm('Weet je zeker dat je deze widget wilt verwijderen?')) {
                        grid.removeWidget(widget, true, true);
                    }
                });

                widget.appendChild(editBtn);
                widget.appendChild(deleteBtn);
            });
        } else {
            editButton.textContent = "Edit Widgets";
            editButton.style.backgroundColor = "#F5F6FA";
            editButton.style.color = "#7E84A3";

            grid.setStatic(true);

            document.querySelectorAll('.editWidgetBtn').forEach(btn => btn.remove());
            document.querySelectorAll('.deleteWidgetBtn').forEach(btn => btn.remove());
        }
    });

    // Open modal
    addButton.addEventListener("click", function() {
        modal.style.display = "block";
    });

    // Close modal
    closeModal.addEventListener("click", function() {
        modal.style.display = "none";
    });

    // Close when clicking outside modal
    window.addEventListener("click", function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            
        }
        if (event.target == document.getElementById("widgetNameModal")) {
            document.getElementById("widgetNameModal").style.display = "none";
        }
    });

    widgetOptions.forEach(option => {
        option.addEventListener("click", function () {
            selectedWidgetType = this.getAttribute("data-widget");
            modal.style.display = "none";
            document.getElementById("widgetNameModal").style.display = "block";
        });
    });

    backButton.addEventListener("click", function() {
        document.getElementById("widgetNameModal").style.display = "none";
        modal.style.display = "block"
    })

    document.querySelector(".closeNameModal").addEventListener("click", () => {
        document.getElementById("widgetNameModal").style.display = "none";
    });

    document.getElementById("confirmAddWidget").addEventListener("click", function () {
        const widgetName = document.getElementById("widgetNameInput").value.trim();
        // if (!widgetName) {
        //     alert("Voer een naam in voor de widget.");
        //     return;
        // }

        // const items = document.querySelectorAll('.grid-stack-item');
        // if (items.length >= 4) {
        //     alert('Je kunt maximaal 4 widgets toevoegen.');
        //     return;
        // }

        fetch('widgets/widgetTemplate.php')
            .then(response => response.text())
            .then(data => {
                const widgetWrapper = document.createElement('div');
                widgetWrapper.innerHTML = data;

                widgetWrapper.firstElementChild.setAttribute('data-widget-type', selectedWidgetType);               
                widgetWrapper.setAttribute('gs-w', "6");
                widgetWrapper.setAttribute('gs-h', "3");
                grid.makeWidget(widgetWrapper);

                if (editMode) {
                    let editBtn = document.createElement('button');
                    editBtn.classList.add('editWidgetBtn');
                    editBtn.innerHTML = '<i class="fa fa-pencil widgetButton"></i>';
                    editBtn.style.position = 'absolute';
                    editBtn.style.top = '15px';
                    editBtn.style.right = '55px';
                    editBtn.style.border = 'none';
                    editBtn.style.background = 'transparent';
                    editBtn.style.cursor = 'pointer';
                    editBtn.style.fontSize = '1.2em';

                    let deleteBtn = document.createElement('button');
                    deleteBtn.classList.add('deleteWidgetBtn');
                    deleteBtn.innerHTML = '<i class="fa fa-trash red widgetButton"></i>';
                    deleteBtn.style.position = 'absolute';
                    deleteBtn.style.top = '15px';
                    deleteBtn.style.right = '20px';
                    deleteBtn.style.border = 'none';
                    deleteBtn.style.background = 'transparent';
                    deleteBtn.style.cursor = 'pointer';
                    deleteBtn.style.fontSize = '1.2em';

                    deleteBtn.addEventListener('click', function(e) {
                        e.stopPropagation();

                        if (confirm('Weet je zeker dat je deze widget wilt verwijderen?')) {
                            grid.removeWidget(widgetWrapper, true, true);
                        }
                    });

                    widgetWrapper.appendChild(editBtn);
                    widgetWrapper.appendChild(deleteBtn);
                }
            })
            .catch(error => console.error('Error loading widget:', error));

        // Sluit tweede modal en reset input
        document.getElementById("widgetNameInput").value = "";
        document.getElementById("widgetNameModal").style.display = "none";
    });
});
