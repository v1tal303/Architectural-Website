class Footer extends HTMLElement {
    constructor() {
      super();
    }
  
    connectedCallback() {
      this.innerHTML = `
        <footer>
        <section class="footer">

        <hr> 
        <p> <b>2021</b> - VD Architecture - J84306 </p> 
        
        </section>
        </footer>
      `;
    }
  }
  
  customElements.define('footer-component', Footer);