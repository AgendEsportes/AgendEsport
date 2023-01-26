import React, { Component, Fragment } from 'react'
import { Navbar, Container } from 'react-bootstrap';
import Logo from '../../assets/images/logo.png';


class NavMenuDesktop extends Component {
  render() {
    return (
      <div>
        <Fragment>
 <nav class="navbar navbar-light navbar-dark imageWrapper">
       
        <Container fluid={'true'}>
          <Navbar.Brand href="#home">
            <img
              src= {Logo}
              width="290x"
              height="50px"
              top="10px"
              left="10px"
              alt="AgendEsport logo"
            />
          </Navbar.Brand>
          <div className='img'></div>
        </Container>
      </nav>

        </Fragment>
        
      </div>
    )
  }
}

export default NavMenuDesktop
