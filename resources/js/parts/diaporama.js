export default class MenuToggle {
    static get selector() {
        return '.slider__container';
    }
    constructor(element) {
        console.log('ho')
        this.slider = element;
        this.diaporama = document.querySelector('.slider__container');
        this.div = document.querySelector('.slider__miniature');
        this.images = document.querySelectorAll('.slider__image');
        this.nb_img = this.images.length
        this.position = 0




        this.slider.addEventListener('click', (e)=>{
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
    }
    openMenu(e) {
        e.preventDefault();
    }




}