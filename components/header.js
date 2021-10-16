class Header extends HTMLElement {
    constructor() {
      super();
    }
  
    connectedCallback() {
      this.innerHTML = `
        <header>
          <nav>
          <ul class="navigation">
          <a href="index.php"> <li>Home</li></a>
          <a href="archviz.html"> <li>ArchViz</li></a>
          <a href="showcase.php"> <li>User Uploads</li></a>
          <a href="animation.html"><li>Animations</li></a>
          <a href="quote.php"> <li>Manage&Upload</li></a>
          <a href="contact.html"> <li>Contact</li></a>
         </ul>
          </nav>
        </header>
      `;
    }
  }
  
  customElements.define('header-component', Header);