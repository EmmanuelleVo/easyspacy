export default class Languages {

    static get selector() {
        return '.languages';
    }
    constructor(element) {
        this.root = element;
        this.btn = element.querySelector('.languages__lang');
        this.isOpen = false;

        this.btn.addEventListener('click', (e) => this.toggleDropdown(e));
        document.addEventListener('click', (e) => this.bodyClick(e));
    }

    toggleDropdown(event) {
        event.preventDefault();

        if(this.isOpen) {
            this.close();
        } else {
            this.open();
        }
    }

    bodyClick(event) {
        if(event.target === this.root || this.root.contains(event.target)) {
            return;
        }

        if(this.isOpen) {
            event.preventDefault();
            this.close();
        }
    }

    open() {
        this.isOpen = true;

        this.root.classList.add('languages--visible');
    }

    close() {
        this.isOpen = false;

        this.root.classList.remove('languages--visible');
    }

}