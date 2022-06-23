
@font-face {
    font-family: "Open Sans";
    src: url(../fonts/OpenSans-Light.ttf)
}

* {
    font-family: 'Open Sans';
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {height: 100%;}

header {
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    margin-bottom: 2%;
}

body {
    background: #f5f5f5;
    color: #454545
}

.navbar .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}
.navbar .navbar-toggler {
    border-color: rgba(255,255,255, .5);
}

.container {
    max-width: 1250px !important;
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6, p, .navbar, .brand, a, .td-name, td {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-family: 'Muli', "Helvetica", Arial, sans-serif; 
}
h1, .h1, h2, .h2, h3, .h3, h4, .h4 {
    font-weight: 400;
}
h1, .h1 {
    font-size: 3.2em;
}
h2, .h2 {
    font-size: 2.6em;
}
h3, .h3 {
    font-size: 1.825em;
    line-height: 1.4;
}
h4, .h4 {
    font-size: 1.5em;
    font-weight: 600;
    line-height: 1.2em;
}
h5, .h5 {
    font-size: 1.25em;
    font-weight: 400;
    line-height: 1.4em;
}
h6, .h6 {
    font-size: 0.9em;
    font-weight: 600;
    text-transform: uppercase;
}
p {
    font-size: 16px;
    line-height: 1.4em;
}
h1 small, h2 small, h3 small, h4 small, h5 small, h6 small, .h1 small, .h2 small, .h3 small, .h4 small, .h5 small, .h6 small, h1 .small, h2 .small, h3 .small, h4 .small, h5 .small, h6 .small, .h1 .small, .h2 .small, .h3 .small, .h4 .small, .h5 .small, .h6 .small {
    color: #9A9A9A;
    font-weight: 300;
    line-height: 1.4em;
}
h1 small, h2 small, h3 small, h1 .small, h2 .small, h3 .small {
    font-size: 60%;
}
.navbar-dark.navbar-expand-lg.navbar-dark {
  margin-top: 0;
  background: #2196f3;
  border-bottom: 4px solid #1976d2;
  font-weight: 700;
  padding: 0;
  font-size: 17px;
}
.navbar-dark ul.navbar-nav>li.nav-item {
  padding: 10px;
}
.navbar-dark ul.navbar-nav>li.nav-item>a.nav-link {
  color: #fff !important;
}
.navbar-dark li.nav-item:hover {
  background: #1976d2;
}
.navbar-dark a.nav-link:hover {
  transform: scale(1.1);
}
.navbar-dark .navbar-brand {
  color: #fff;
  padding-left: 2%;
}

.jumbotron-fluid {
	margin-bottom: 0;
    background: transparent
}

.text-style {
    text-shadow: 4px 4px 5px rgba(120,120,120,0.6);
    font-weight: 600;
    text-transform: uppercase
}

.content {
    background: linear-gradient(to bottom, #64b5f6, #90caf9);
    color: white;
    text-shadow: 2px 2px 3px rgba(0,0,0,0.6);
    font-weight: bold;
    border-bottom: 4px solid #42a5f5;
    width: 100% !important;
    padding: 30px;
    margin-bottom: 1%;
}

.card {
    margin-top: 0;
    margin-bottom: 1.5rem;
    text-align: left;
    position: relative;
    box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
    border-radius: 4px;
    transition: all 0.3s ease;
}
.card:hover {
    box-shadow: 1px 2px 4px 0px rgba(46,61,73,0.2);
}

footer {
    background: #212121;
    color: #fff;
    padding: 30px;
    bottom: 0px;
    width: 100%;
}

.btn {
    border-radius: 0
}
.btn-danger {
    color: #fff;
    background: #f44336;
    border-bottom: 4px solid #c62828;
}
.btn-danger:hover, .btn-danger:focus {
    color: #fff;
    background: #c62828
}
.btn-success {
    color: #fff;
    background: #4caf50;
    border-bottom: 4px solid #2e7d32;
}
.btn-success:hover, .btn-success:focus {
    color: #fff;
    background: #2e7d32
}
.btn-warning {
    color: #fff;
    background: #fbc02d;
    border-bottom: 4px solid #f9a825;
}
.btn-warning:hover, .btn-warning:focus {
    color: #fff;
    background: #f9a825
}
.btn-dark {
    background: #9e9e9e;
    border-bottom: 4px solid #424242;
}
.btn-dark:hover, .btn-dark:focus {
    color: #fff;
    background: #424242
}
.btn-primary {
    background: #1e88e5;
    border-bottom: 4px solid #1976d2;
}
.btn-primary:hover, .btn-primary:focus {
    color: #fff;
    background: #1976d2
}


section#center #noticias .card {
  border-radius: 20px 10px;
}
section#center #noticias .card .card-header p {
  text-align: justify;
  margin: 0 auto;
}
section#center #noticias .card .card-header p:first-of-type {
  padding-top: 4%;
}
section#center #noticias .card .card-header img {
  border-radius: 10%
}
section#center #noticias .card .card-noticia {
  background: #2962ff;
  color: #fff;
  text-align: justify;
  padding: 25px
}
section#center #noticias .card .card-noticia small {
  color: #fff;
}
section#center #noticias .card .card-noticia h3:first-of-type {
  padding-top: 15px;
}
section#center #noticias .card .card-noticia h3 {
  font-weight: 1000;
  line-height: .9 !important;
}
section#center #noticias .card .card-body {
  text-align: justify;
  overflow: hidden;
  text-overflow: ellipsis;
}
section#center #noticias .card .card-footer {
  margin-top: 30px;
}