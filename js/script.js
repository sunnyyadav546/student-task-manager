// Registered Email: sunnyraj870931@gmail.com
// Show welcome message
window.onload = function () {
    console.log("Student Task Manager Loaded Successfully");
};

// Delete confirmation
function confirmDelete() {
    return confirm("Are you sure you want to delete this task?");
}

// Form validation
function validateForm() {
    let title = document.getElementById("title").value.trim();
    let description = document.getElementById("description").value.trim();
    let dueDate = document.getElementById("due_date").value;

    if (title === "") {
        alert("Please enter Task Title");
        return false;
    }

    if (description === "") {
        alert("Please enter Task Description");
        return false;
    }

    if (dueDate === "") {
        alert("Please select Due Date");
        return false;
    }

    return true;
}