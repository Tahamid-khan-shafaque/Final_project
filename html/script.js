const toggleButton=document.getElementsByClassName("toggle_btn")[0]
const navbarlinks = document.getElementsByClassName("navbar_links")[0]

toggleButton.addEventListener('click',()=>{
    navbarlinks.classList.toggle('active')
})