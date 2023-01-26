import React, { Component, Fragment } from 'react';
import { Container, Row, Col } from 'react-bootstrap';
import Foto from '../../assets/images/basquete.jpeg';

class Fotos extends Component {
  render() {
    return (
      <Fragment>
        <Container>
          <Row>
            <Col>
            <div class="texto-horario">
              <h1 style={{color:'white', position:"absolute", top:'400px'}}>99 horários disponíveis</h1>
            </div>
            <div class="fotoFundo">
              <img style={{position:'absolute', top:'400px', left:'500px'}} class="cupreto"
              scr={Foto}
              alt="foto de algum esporte"/>
            </div>
            </Col>
          </Row>
        </Container>
        
      </Fragment>
    )
  }
}

export default Fotos
