import React, { Component } from 'react'
import { Row, Col } from 'reactstrap'
import UniformShirtExample from '../../../../css/images/Equipment/UniformShirtExample.png'

class GeneralInfoShoesTab extends Component {
  render() {
    return (
	   <div>
	   	<Row>
          <Col sm='12'>
            <span className='textFont introText'>
              <img src={UniformShirtExample} className='shirtsExample' alt='White Shirt'/>
              <br></br>
              <h2>Uniform Shirts</h2>
              <ul className='footwearList'>
                <li>
                  <i className='fas fa-chess-rook'></i>
                  &nbsp;&nbsp;AEMMA Uniform for all students includes a plain white t-shirt and black athletic pants.
                </li>
                <li>
                  <i className='fas fa-chess-knight'></i>
                  &nbsp;&nbsp;Students may purchase a white AEMMA uniform shirt from their local club.
                </li>
                <li>
                  <i className='fas fa-chess-rook'></i>
                  &nbsp;&nbsp;Non-white AEMMA shirts may be worn on a per case basis as individual chapter rules permit.
                </li>
              </ul>
              <div className='ClickTabsBanner'>
                <i className='fas fa-chess'></i>
              &nbsp;&nbsp;Click the Tabs above to find info
               on reccomended brands &nbsp;&nbsp;<i className='fas fa-chess'></i>
              </div>
            </span>
          </Col>
        </Row>
	    </div>
	  )
	 }
}

export default GeneralInfoShoesTab
