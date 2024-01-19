<style>
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
    /* adds animation for all transitions */
    -webkit-transition: .25s ease-in-out;
    -moz-transition: .25s ease-in-out;
    -o-transition: .25s ease-in-out;
    transition: .25s ease-in-out;
    margin: 0;
    padding: 0;
    -webkit-text-size-adjust: none;
}

/* Makes sure that everything is 100% height */

html,
body {
    height: 100%;
    overflow: hidden;
}

body {
    margin: 0;
    background-image: url('/imgs/profile.PNG');
    background-size: 100% 100%;
    background-repeat: no-repeat;
}

a {
    text-decoration: none;
    color: white;
}

.example {
    height: 100vh;
}

/* gets the actual input out of the way; 
    we're going to style the label instead */

#drawer-toggle {
    position: absolute;
    opacity: 0;
}

div {
    display: inline-block;
    vertical-align: middle;
}

#drawer-toggle-label {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    left: 0px;
    height: 50px;
    width: 50px;
    display: block;
    position: fixed;
    background: rgba(214, 214, 214, 0);
    z-index: 1;
}

/* adds our "hamburger" menu icon */

#drawer-toggle-label:before {
    content: '';
    display: block;
    position: absolute;
    height: 2px;
    width: 24px;
    background: #8d8d8d;
    left: 13px;
    top: 18px;
    box-shadow: 0 6px 0 #8d8d8d, 0 12px 0 #8d8d8d;
}

header {
    width: 100%;
    position: fixed;
    left: 0px;
    background: #efefef;
    padding: 10px 10px 10px 50px;
    font-size: 30px;
    line-height: 30px;
    z-index: 0;
    height: 8%;
}

/* drawer menu pane - note the 0px width */

#drawer {
    position: fixed;
    top: 0;
    left: -300px;
    height: 100%;
    width: 300px;
    /* background: #2f2f2f; */
    background: white;
    overflow-x: hidden;
    overflow-y: scroll;
    padding: 20px;
    -webkit-overflow-scrolling: touch;
}


/* checked styles (menu open state) */

#drawer-toggle:checked~#drawer-toggle-label {
    height: 100%;
    width: calc(100% - 300px);
    /* background: rgba(255, 255, 255, .8); */
    background: rgb(224, 224, 224);
}

#drawer-toggle:checked~#drawer-toggle-label,
#drawer-toggle:checked~header {
    left: 300px;
}

#drawer-toggle:checked~#drawer {
    left: 0px;
}

#drawer-toggle:checked~#page-content {
    margin-left: 300px;
}

/* Menu item styles */

#drawer ul {
    list-style-type: none;
}

li {
    margin-bottom: 10px;
}

#drawer ul a {
    display: block;
    padding: 10px;
    color: rgb(65, 63, 63);
    text-decoration: none;
}

#drawer ul a:hover {
    color: rgb(153, 153, 153);
}


/* Responsive MQ */

@media all and (max-width:350px) {

    #drawer-toggle:checked~#drawer-toggle-label {
        height: 100%;
        width: 50px;
    }

    #drawer-toggle:checked~#drawer-toggle-label,
    #drawer-toggle:checked~header {
        left: calc(100% - 50px);
    }

    #drawer-toggle:checked~#drawer {
        width: calc(100% - 50px);
        padding: 20px;
    }

    #drawer-toggle:checked~#page-content {
        margin-left: calc(100% - 50px);
    }

}
</style>