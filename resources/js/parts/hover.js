export default class MenuToggle {
    static get selector() {
        return '.burger';
    }
    constructor(element) {
        console.log('hhihi')
        this.burger = element;
        this.menu = document.querySelector('.menu');
        this.close = document.querySelector('.menu__close');
        this.links = document.querySelectorAll('.menu__links');

        this.burger.addEventListener('click', (e)=>{
            //toggle nav
            this.openMenu(e);

            // links animation
            this.links.forEach((link, index)=>{
                if(link.style.animation) {
                    link.style.animation = ''
                }else {
                    link.style.animation = `navLinkFade .5s ease forwards ${index / 7 + 1.5}s`
                }
            })
            //burger animation
            this.burger.classList.toggle('toggle')
        });
        /*this.close.addEventListener('click', (e)=>{
            this.closeMenu(e);
        })*/


    }
    openMenu(e){
        e.preventDefault();
        this.menu.classList.add('menu-active');
        this.menu.classList.toggle('menu-active');
    }
    /*closeMenu(e){
        e.preventDefault();
        this.menu.classList.remove('menu-active');
    }*/




}