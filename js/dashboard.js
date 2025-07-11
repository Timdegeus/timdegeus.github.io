document.addEventListener("DOMContentLoaded", function() {
    let editMode = false;
    const container = document.querySelector('.widgetContent');
    const editButton = document.getElementById('editWidgetButton');
    const modal = document.getElementById("addWidgetModal");
    const addButton = document.getElementById("addWidgetButton");
    const closeModal = document.querySelector(".close");
    const widgetOptions = document.querySelectorAll(".widgetOption");

    const sortable = new Sortable(container, {
        animation: 150,
        disabled: true,
        swap: true, 
        swapClass: 'highlight-swap',
        ghostClass: 'dragging-widget'
    });

    editButton.addEventListener('click', function() {
        editMode = !editMode;

        if (editMode) {
            editButton.textContent = "Save Changes";
            editButton.style.backgroundColor = "rgb(44, 208, 58)";
            editButton.style.border = "solid 1px rgb(236, 236, 236)";
            editButton.style.color = "white";
            addButton.style.opacity = "0.6";
            addButton.style.pointerEvents = "none";
            sortable.option("disabled", false);

            document.querySelectorAll('.widget').forEach(widget => {
                let editBtn = document.createElement('button');
                editBtn.classList.add('editWidgetBtn');
                editBtn.innerHTML = '<i class="fa fa-pencil widgetButton"></i>';
                editBtn.style.position = 'absolute';
                editBtn.style.top = '10px';
                editBtn.style.right = '45px';
                editBtn.style.border = 'none';
                editBtn.style.background = 'transparent';
                editBtn.style.cursor = 'pointer';
                editBtn.style.fontSize = '1.2em';

                let deleteBtn = document.createElement('button');
                deleteBtn.classList.add('deleteWidgetBtn');
                deleteBtn.innerHTML = '<i class="fa fa-trash red widgetButton"></i>';
                deleteBtn.style.position = 'absolute';
                deleteBtn.style.top = '10px';
                deleteBtn.style.right = '10px';
                deleteBtn.style.border = 'none';
                deleteBtn.style.background = 'transparent';
                deleteBtn.style.cursor = 'pointer';
                deleteBtn.style.fontSize = '1.2em';

                deleteBtn.addEventListener('click', function(e) {
                    e.stopPropagation();

                    if (confirm('Weet je zeker dat je deze widget wilt verwijderen?')) {
                        widget.remove();
                    }
                });

                widget.appendChild(editBtn);
                widget.appendChild(deleteBtn);
            });
        } else {
            editButton.textContent = "Edit Widgets";
            editButton.style.backgroundColor = "#F5F6FA";
            editButton.style.color = "#7E84A3";
            addButton.style.opacity = "1";
            addButton.style.pointerEvents = "auto";
            sortable.option("disabled", true);

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
    });

    // Choose widget
    widgetOptions.forEach(option => {
        option.addEventListener("click", function() {
            const widgetType = this.getAttribute("data-widget");
            addWidget(widgetType);
            modal.style.display = "none";
        });
    });

    function addWidget(type) {
        const widgets = container.querySelectorAll('.widget');

        if (widgets.length >= 4) {
            alert('Je kunt maximaal 4 widgets toevoegen.');
            return;
        }

        fetch('widgets/widgetTemplate.php')
            .then(response => response.text())
            .then(data => {
                
                const widgetWrapper = document.createElement('div');
                widgetWrapper.innerHTML = data;

                widgetWrapper.firstElementChild.setAttribute('data-widget-type', type);

                container.insertBefore(widgetWrapper.firstElementChild, container.firstChild);
            })
            .catch(error => console.error('Error loading widget:', error));
    }
});
