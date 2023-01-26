import React, { Component, Fragment } from 'react'
import { Container } from 'react-bootstrap';
import Card from 'react-bootstrap/Card';

class FooterDesktop extends Component {
  render() {
    return (
      <Fragment>
            <Card>
              <Container>
                <div class="footer "></div>
              <div className='image'></div>
              </Container>
            </Card>
        
      </Fragment>
    )
  }
}

export default FooterDesktop
