function changeColor(button) {
    var buttons = document.querySelectorAll('.btn-status');
    var isActive = button.classList.contains('active');

    buttons.forEach(function(btn) {
        btn.classList.remove('active');
    });

    if (!isActive) {
        button.classList.add('active');
    }
}
