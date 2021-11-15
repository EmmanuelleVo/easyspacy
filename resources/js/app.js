import Pluton from 'whitecube-pluton'

console.log('hi')

class DwTest {
    constructor() {
        // TODO
    }
    load() {
        // initialiser Pluton
        this.pluton = new Pluton()
    }
}

window.addEventListener('load', (e) => {
    window.DwTest = new DwTest()
    window.DwTest.load()
})


