document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("authentication-modal");
    const modalToggle = document.querySelector('[data-modal-toggle="authentication-modal"]');
    const modalHideButton = document.querySelector('[data-modal-hide="authentication-modal"]');

    // Hiển thị modal khi nhấn nút
    modalToggle.addEventListener("click", function () {
        modal.classList.remove("hidden");
    });

    // Đóng modal khi nhấn nút đóng
    modalHideButton.addEventListener("click", function () {
        modal.classList.add("hidden");
    });
});
