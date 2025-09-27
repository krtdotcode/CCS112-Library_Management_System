document.addEventListener('DOMContentLoaded', function() {
    const adminBtn = document.querySelector('button[data-role="admin"]');
    const userBtn = document.querySelector('button[data-role="user"]');
    if (adminBtn) {
        adminBtn.addEventListener('click', function() {
            console.log('Admin login selected. Welcome, Librarian!');
        });
    }
    if (userBtn) {
        userBtn.addEventListener('click', function() {
            console.log('User login selected. Welcome, Bookworm!');
        });
    }
});