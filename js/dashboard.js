document.addEventListener("DOMContentLoaded", function() {
    let editMode = false;
    const container = document.querySelector('.widgetContent');
    const editButton = document.getElementById('editWidgetButton');
    const modal = document.getElementById("addWidgetModal");
    const addButton = document.getElementById("addWidgetButton");
    const closeModal = document.querySelector(".close");
    const widgetOptions = document.querySelectorAll(".widgetOption");

    // Init SortableJS with Swap plugin (disabled by default)
    const sortable = new Sortable(container, {
        animation: 150,
        disabled: true,
        swap: true, // Enable swap plugin
        swapClass: 'highlight-swap', // Optional: class for visual swap highlight
        ghostClass: 'dragging-widget' // Class for opacity effect
    });

    editButton.addEventListener('click', function() {
        editMode = !editMode;

        if (editMode) {
            editButton.textContent = "Save Changes";
            sortable.option("disabled", false);

            // Show delete buttons
            document.querySelectorAll('.widget').forEach(widget => {
                let deleteBtn = document.createElement('button');
                deleteBtn.classList.add('deleteWidgetBtn');
                deleteBtn.innerHTML = '<i class="fa fa-trash"></i>';
                deleteBtn.style.position = 'absolute';
                deleteBtn.style.top = '10px';
                deleteBtn.style.right = '10px';
                deleteBtn.style.border = 'none';
                deleteBtn.style.background = 'transparent';
                deleteBtn.style.cursor = 'pointer';
                deleteBtn.style.fontSize = '1.2em';
                deleteBtn.style.color = 'red !important';

                deleteBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    widget.remove();
                });

                widget.appendChild(deleteBtn);
            });
        } else {
            editButton.textContent = "Edit Widgets";
            sortable.option("disabled", true);

            // Remove delete buttons
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

        // Hier kun je logica uitbreiden per widget type
        fetch('widgets/widgetTemplate.php')
            .then(response => response.text())
            .then(data => {
                const noWidget = container.querySelector('.noWidget');
                if (noWidget) {
                    noWidget.remove();
                }

                const widgetWrapper = document.createElement('div');
                widgetWrapper.innerHTML = data;

                // Voeg een data-attribuut toe voor type-indicatie
                widgetWrapper.firstElementChild.setAttribute('data-widget-type', type);

                container.insertBefore(widgetWrapper.firstElementChild, container.firstChild);
            })
            .catch(error => console.error('Error loading widget:', error));
    }
});
