document.addEventListener('DOMContentLoaded', function() {
    const editForm = document.getElementById('editForm');
    const deleteForm = document.getElementById('deleteForm');
    const archiveForm = document.getElementById('archiveForm');
    const statusSelects = document.querySelectorAll('.status-select');

    if (editForm) {
        editForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Handle edit form submission
            const title = document.getElementById('todoTitle').value;
            const description = document.getElementById('todoDescription').value;
            // Perform AJAX request to update the to-do item
            console.log('Editing item:', { title, description });
            // Redirect to index.php after successful edit
            window.location.href = 'index.php';
        });
    }

    if (deleteForm) {
        deleteForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Handle delete form submission
            // Perform AJAX request to delete the to-do item
            console.log('Deleting item');
            // Redirect to index.php after successful delete
            window.location.href = 'index.php';
        });
    }

    if (archiveForm) {
        archiveForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Handle archive form submission
            // Perform AJAX request to archive the to-do item
            console.log('Archiving item');
            // Redirect to index.php after successful archive
            window.location.href = 'index.php';
        });
    }

    statusSelects.forEach(select => {
        select.addEventListener('change', function() {
            const taskId = this.getAttribute('data-task-id');
            const newStatus = this.value;
            // Perform AJAX request to update the task status
            console.log('Updating status for task', taskId, 'to', newStatus);
        });
    });
});
