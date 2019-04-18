import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Home from './Home';
import About from './About';
import Profile from './Profile';
import {BrowserRouter as Router, Link, Route} from 'react-router-dom';

export default class Index extends Component {
    render() {
        return (
            <Router>
            <div>
            <div className="mobile-menu-area">
            <nav className="navbar navbar-default">
            <div className="container-fluid">
            <div className="navbar-header">
            <button type="button" className="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span className="sr-only">Toggle navigation</span>
            <span className="icon-bar"></span>
            <span className="icon-bar"></span>
            <span className="icon-bar"></span>
            </button>
            <a className="navbar-brand">Menu</a>
            </div>
            <div className="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul className="nav navbar-nav">
            <li><Link to="/">Beranda</Link></li>
            <li><Link to="/profile">Profile Saya</Link></li>
            <li><Link to="/about">Tentang Kami</Link></li>
            </ul>
            </div>
            </div>
            </nav>
            <div className="row">
            <div className="col-sm-12 col-xs-12">
            <Route exact path='/' component={Home}  />
            <Route exact path='/profile' component={Profile}  />
            <Route exact path='/about' component={About}  />
            </div>
            </div>
            </div>
            <div className="main-menu-area mg-tb-40">
            <div className="container">
            <div className="row">
            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul className="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
            <li className="active">
            <Link to="/">
            <i className="notika-icon notika-house"></i>
            Beranda
            </Link>
            </li>
            <li className="active">
            <Link to="/profile">
            <i className="notika-icon notika-mail"></i> 
            Profile Saya
            </Link>

            </li>
            <li className="active">
            <Link to="/about">
            <i className="notika-icon notika-edit"></i> 
            Tentang Kami
            </Link>
            </li>
            </ul>
            </div>
            <div className="row">
            <div className="col-lg-12 col-md-12">
            <br />
            <Route exact path='/' component={Home}  />
            <Route exact path='/profile' component={Profile}  />
            <Route exact path='/about' component={About}  />
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </Router>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}
