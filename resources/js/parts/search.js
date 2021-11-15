export default class SearchToggle {
    static get selector() {
        return '.search';
    }
    constructor(element) {
        this.element= element;

        this.loupe = document.querySelector('.menu__search');

        this.loupe.addEventListener('click', (e)=>{
            e.preventDefault();
            this.toggleMenu();
        })
    }
    toggleMenu(){
        if(!this.element.classList.contains('search__active')){
            this.element.classList.add('search__active');
            this.element.addEventListener('animationend',()=>{
                this.zIndex();
            });
        } else if (this.element.classList.contains('search__active')){
            this.element.classList.remove('search__active');
            this.element.addEventListener('animationend',()=>{
                this.zIndex();
            });
        }
    }
    zIndex(){
        if(this.element.classList.contains('search__active')){
            this.element.style.zIndex = 1;
        }else if(!this.element.classList.contains('search__active') && this.element.zIndex === 1){
            this.element.style.zIndex = -1;
        }
    }
}