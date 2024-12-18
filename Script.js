document.getElementById('studentForm').addEventListener('submit', function (e) {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const age = parseInt(document.getElementById('age').value);
    const gender = document.querySelector('input[name="gender"]:checked');

    // Basic validations
    if (!name || !email || !age || !gender) {
        alert('Please fill all required fields.');
        e.preventDefault();
    } else if (!/^\S+@\S+\.\S+$/.test(email)) {
        alert('Please enter a valid email.');
        e.preventDefault();
    } else if (age < 18 || age > 50) {
        alert('Age must be between 18 and 50.');
        e.preventDefault();
    }
});