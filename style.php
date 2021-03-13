<style>
@import url('https://fonts.googleapis.com/css2?family=Redressed&family=Ubuntu:wght@500;700&display=swap');
* {
    scroll-behavior: smooth;
    box-sizing: border-box;
}

.navbar {
    background-color: lightgreen;
}

.navbar-brand {
    font-family: 'ubuntu', sans-serif;
    font-size: 2rem;
    color: crimson;
}

.navbar-brand:hover {
    color: crimson;
}

.navbar-brand span {
    font-family: 'Redressed', cursive;
    color: black;
}

.nav-link {
    font-family: 'ubuntu', sans-serif;
    color: black;
    text-align: center;
    font-size: 18px;
    margin: 0 20px;
}

.navbar-nav {
    margin-left: auto;
}

.nav-link:hover {
    color: crimson;
}

.dropdown-menu {
    background-color: lightgreen;
}

.dropdown-menu :hover {
    background-color: lightgreen;
}

.dropdown-item {
    font-family: 'ubuntu', sans-serif;
    color: black;
    text-align: center;
}

.dropdown-item:hover {
    color: crimson;
}

.btn {
    background-color: lightgreen;
    color: black;
    font-family: 'ubuntu', sans-serif;
}

.leads {
    font-family: 'ubuntu', sans-serif;
    font-weight: 600;
    font-size: 35px;
    text-shadow: 1px 3px lightgreen;
}

.name {
    font-family: 'ubuntu', sans-serif;
    font-weight: 600;
    font-size: 70px;
}

.name span {
    color: crimson;
}

.jumbotron {
    margin-left: 10px;
}

.about h4 {
    text-align: center;
    padding-top: 20px;
    font-family: 'ubuntu', sans-serif;
    font-size: 30px;
    position: relative;
}

.about h4::before {
    content: '';
    background: lightgreen;
    width: 100px;
    height: 5px;
    position: absolute;
    margin-top: 35px;
    border-radius: 10px 100px;
}

.skill h4 {
    text-align: center;
    padding-top: 20px;
    font-family: 'ubuntu', sans-serif;
    font-size: 30px;
    position: relative;
}

.skill h4::before {
    content: '';
    background: lightgreen;
    width: 100px;
    height: 5px;
    position: absolute;
    margin-top: 35px;
    border-radius: 10px 100px;
}

.contact h4 {
    text-align: center;
    padding-top: 20px;
    font-family: 'ubuntu', sans-serif;
    font-size: 30px;
    position: relative;
}

.contact h4::before {
    content: '';
    background: lightgreen;
    width: 125px;
    height: 5px;
    position: absolute;
    margin-top: 35px;
    border-radius: 10px 100px;
}

#cont {
    font-family: 'ubuntu', sans-serif;
    font-size: 20px;
    padding-left: 50px;
}

#cont p::first-letter {
    font-size: xx-large;
}

.row {
    width: 100%;
}

#cont span {
    color: crimson;
    font-size: 30px;
}

.img {
    margin-left: 35px;
    border: 3px solid lightgreen;
}

small {
    margin-left: 300px;
}

.sm {
    margin-left: 320px;
    font-family: 'ubuntu', sans-serif;
    color: crimson;
}

.ht {
    width: 100px;
    height: 15px;
    background: lightgreen;
    transition: width 2s;
    border-radius: 10px 10px;
    margin-top: 10px;
    margin-left: 50px;
}

.ht:hover {
    width: 1000px;
}

.ct {
    width: 100px;
    height: 15px;
    background: lightgreen;
    transition: width 2s;
    border-radius: 10px 10px;
    margin-top: 10px;
    margin-left: 50px;
}

.ct:hover {
    width: 800px;
}

.jumbotron img {
    width: 100%;
    height: 150vh;
}

.pt {
    width: 100px;
    height: 15px;
    background: lightgreen;
    transition: width 2s;
    border-radius: 10px 10px;
    margin-top: 10px;
    margin-left: 50px;
}

.pt:hover {
    width: 700px;
}

.jt {
    width: 100px;
    height: 15px;
    background: lightgreen;
    transition: width 2s;
    border-radius: 10px 10px;
    margin-top: 10px;
    margin-left: 50px;
}

.jt:hover {
    width: 600px;
}

.mt {
    width: 100px;
    height: 15px;
    background: lightgreen;
    transition: width 2s;
    border-radius: 10px 10px;
    margin-top: 10px;
    margin-left: 50px;
}

.mt:hover {
    width: 600px;
}

.bt {
    width: 100px;
    height: 15px;
    background: lightgreen;
    transition: width 2s;
    border-radius: 10px 10px;
    margin-top: 10px;
    margin-left: 50px;
}

.bt:hover {
    width: 900px;
}

.skill h3 {
    margin-left: 50px;
    margin-top: 25px;
    font-family: 'ubuntu', sans-serif;
}

.skill h3 span {
    color: lightgreen;
    font-size: 15px;
}

.form label {
    margin-left: 60px;
    padding-bottom: 10px;
    padding-top: 5px;
    font-family: 'ubuntu', sans-serif;
    text-transform: capitalize;
    text-shadow: 1px 1px lightgreen;
}

.form input {
    margin-left: 60px;
    font-family: 'ubuntu', sans-serif;
    color: black;
    padding-right: 200px;
    outline: none;
}

.form textarea {
    margin-left: 60px;
    font-family: 'ubuntu', sans-serif;
    color: black;
    outline: none;
    resize: none;
    padding-right: 167px;
}

.form button {
    margin-left: 60px;
    text-transform: capitalize;
    margin-top: 5px;
    outline: none;
    color: black;
    background-color: lightgreen;
    font-family: 'ubuntu', sans-serif;
    box-shadow: none;
    border: lightgreen;
    margin-bottom: 10px;
}

.ad p {
    margin-left: 80px;
    font-family: 'ubuntu', sans-serif;
    font-size: 20px;
    color: black;
}

.ph p {
    font-family: 'ubuntu', sans-serif;
    margin-left: 70px;
    font-size: 20px;
}

.em p {
    font-family: 'ubuntu', sans-serif;
    margin-left: 70px;
    font-size: 20px;
}

.h4 {
    padding-top: 20px;
    padding-bottom: 5px;
    color: black;
    font-family: 'ubuntu', sans-serif;
    margin-left: 60px;
    text-shadow: 1px 2px lightgreen;
    position: relative;
}

.tt {
    padding-top: 20px;
    padding-bottom: 5px;
    color: black;
    font-family: 'ubuntu', sans-serif;
    margin-left: 60px;
    text-shadow: 1px 2px lightgreen;
}

footer {
    background-color: lightgreen;
    text-align: center;
}

footer a {
    text-decoration: none;
    font-family: 'ubuntu', sans-serif;
    color: crimson;
}

footer a:hover {
    color: black;
}

footer span {
    font-family: 'ubuntu', sans-serif;
}

#to {
    outline: none;
    border: none;
    color: lightgreen;
    font-size: 20px;
}

#to {
    display: flex;
    justify-content: flex-end;
    padding-right: 10px;
    padding-bottom: 10px;
}


/* RESPONSIVE */

@media(max-width:960px) {
    .jumbotron img {
        height: 75vh;
        width: 100%;
    }
    .name {
        font-family: 'ubuntu', sans-serif;
        font-weight: 600;
        font-size: 27px;
    }
    .leads {
        font-family: 'ubuntu', sans-serif;
        font-weight: 600;
        font-size: 20px;
        text-shadow: 1px 3px lightgreen;
    }
    #cont {
        font-family: 'ubuntu', sans-serif;
        font-size: 20px;
        padding-left: 30px;
        font-weight: 500;
    }
    strong {
        font-size: 13px;
        color: crimson;
    }
    small {
        margin-left: 70px;
    }
    .sm {
        margin-left: 80px;
        font-family: 'ubuntu', sans-serif;
        color: crimson;
    }
    .img {
        margin-left: 25px;
        border: 3px solid lightgreen;
        width: 300px;
        height: 300px;
    }
    .skill h3 {
        margin-left: 30px;
        margin-top: 25px;
        font-family: 'ubuntu', sans-serif;
    }
    .ht {
        width: 100px;
        height: 15px;
        background: lightgreen;
        transition: width 2s;
        border-radius: 10px 10px;
        margin-top: 10px;
        margin-left: 30px;
    }
    .ht:hover {
        width: 270px;
    }
    .ct {
        width: 100px;
        height: 15px;
        background: lightgreen;
        transition: width 2s;
        border-radius: 10px 10px;
        margin-top: 10px;
        margin-left: 30px;
    }
    .ct:hover {
        width: 230px;
    }
    .pt {
        width: 100px;
        height: 15px;
        background: lightgreen;
        transition: width 2s;
        border-radius: 10px 10px;
        margin-top: 10px;
        margin-left: 30px;
    }
    .pt:hover {
        width: 250px;
    }
    .jt {
        width: 100px;
        height: 15px;
        background: lightgreen;
        transition: width 2s;
        border-radius: 10px 10px;
        margin-top: 10px;
        margin-left: 30px;
    }
    .jt:hover {
        width: 240px;
    }
    .mt {
        width: 100px;
        height: 15px;
        background: lightgreen;
        transition: width 2s;
        border-radius: 10px 10px;
        margin-top: 10px;
        margin-left: 30px;
    }
    .mt:hover {
        width: 260px;
    }
    .bt {
        width: 100px;
        height: 15px;
        background: lightgreen;
        transition: width 2s;
        border-radius: 10px 10px;
        margin-top: 10px;
        margin-left: 30px;
    }
    .bt:hover {
        width: 270px;
    }
    .tt {
        padding-top: 20px;
        padding-bottom: 5px;
        color: black;
        font-family: 'ubuntu', sans-serif;
        margin-left: 30px;
        text-shadow: 1px 2px lightgreen;
    }
    .ad p {
        margin-left: 50px;
        font-family: 'ubuntu', sans-serif;
        font-size: 20px;
        color: black;
    }
    .ph p {
        font-family: 'ubuntu', sans-serif;
        margin-left: 50px;
        font-size: 20px;
    }
    .em p {
        font-family: 'ubuntu', sans-serif;
        margin-left: 50px;
        font-size: 20px;
    }
    .form input {
        margin-left: 30px;
        font-family: 'ubuntu', sans-serif;
        color: black;
        padding-right: 70px;
        border-radius: 5px 5px;
        border-color: black;
        outline: none;
    }
    .h4 {
        padding-top: 20px;
        padding-bottom: 5px;
        color: black;
        font-family: 'ubuntu', sans-serif;
        margin-left: 30px;
        text-shadow: 1px 2px lightgreen;
        position: relative;
    }
    .form label {
        margin-left: 30px;
        padding-bottom: 10px;
        padding-top: 5px;
        font-family: 'ubuntu', sans-serif;
        text-transform: capitalize;
        text-shadow: 1px 1px lightgreen;
    }
    .form textarea {
        margin-left: 30px;
        font-family: 'ubuntu', sans-serif;
        border-color: black;
        border-radius: 10px 10px;
        outline: none;
        resize: none;
        padding-right: 40px;
    }
    .form button {
        margin-left: 30px;
        text-transform: capitalize;
        margin-top: 5px;
        outline: none;
        color: black;
        background-color: lightgreen;
        font-family: 'ubuntu', sans-serif;
        box-shadow: none;
        border: lightgreen;
        margin-bottom: 10px;
    }
    .navbar {
        padding: 1px 0px;
    }
    .fixed-top {
        position: static;
    }
}

</style>