let btn = document.getElementById('btn');
btn.addEventListener('click', function(e){
    e.preventDefault();
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let subject = document.getElementById('subject').value;
    let message = document.getElementById('message').value;
    let body = 'Name: ' + name + '<br/> Email: ' + email + '<br/> ' + subject + '<br/> Message: ' + message;
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "kaychipcoder@gmail.com",
        Password : "FBD49F2FFA13CF4B9130A023FCEED173B33F",
        Port: "2525",
        To : 'nguyenvunguyen720@gmail.com',
        From : "blsteam2022@gmail.com",
        Subject : subject,
        Body : body
    }).then(
      message => alert(message)
    );
});