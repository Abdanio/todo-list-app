document.addEventListener('DOMContentLoaded', function() {
    const editForm = document.getElementById('editForm');
    const deleteForm = document.getElementById('deleteForm');

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
});
