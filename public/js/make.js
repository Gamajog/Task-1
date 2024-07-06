function make() {
    let name = document.getElementById("name");
    let date = document.getElementById("date");
    let email = document.getElementById("email");
    let message = document.getElementById("message");

    name = name.value;
    date = date.value;
    email = email.value;
    message = message.value;

    if (name == "") {
        return alert("Name input fields must be not empty");
    } else if (date == "") {
        return alert("Email input fields must be not empty");
    } else if (email == "") {
        return alert("Email input fields must be not empty");
    } else if (message == "") {
        return alert("Description input fields must be not empty");
    } else {
        return alert("Gotcha. Nothing will happen because its just frontend");
    }

    //   const a = document.createElement('a');

    //   a.href = `mailto:${emailReciver}?subject=${subject}&body=Hello my name ${name}, ${subject}, ${message}`;
    //   a.target = '_blank';
    //   a.click();

    let dataObject = {
        name: name,
        date: date,
        email: email,
        message: message,
    };
    console.log(dataObject);
}
