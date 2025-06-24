document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    form.addEventListener("submit", function (event) {
        const name = document.querySelector("input[name='name']").value;
        const email = document.querySelector("input[name='email']").value;
        const contact = document.querySelector("input[name='contact']").value;
        
        if (!name || !email || !contact) {
            alert("All fields are required!");
            event.preventDefault();
        }
    });
});
