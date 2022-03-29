document.getElementById("login").addEventListener("click", function login() {
    u = document.getElementById("login_form").elements[0].value
    p = document.getElementById("login_form").elements[1].value
    if (u.length < 6 || u.length > 10 || u.match(/^\W+$/) || u.match(/^\d/)) {
        window.alert('Invalid username or password')
        return (0)
    }
    if (p.match(/^\W+$/) || !p.match("^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)")) {
        window.alert('Invalid username or password')
        return (0)
    }
    window.alert('User validated')
})