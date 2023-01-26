import React, { Component, Fragment } from 'react'
import FooterDesktop from '../components/common/FooterDesktop'
import NavMenuDesktop from '../components/common/NavMenuDesktop'
import FeaturedSports from '../components/home/FeaturedSports'

export class HomePage extends Component {
  render() {
    return (
      <Fragment>
        <NavMenuDesktop />
        <FeaturedSports />
        <FooterDesktop />
      </Fragment>
    )
  }
}

export default HomePage
