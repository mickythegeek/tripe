import React from "react";
import Twittericon from "../Assets/Social Media Logo (1).png";
import Facebookicon from "../Assets/Social Media Logo.png";
import PasswwordIcon from "../Assets/Icon.png";
import EmailIcon from "../Assets/Icon (1).png";
import Logomark from "../Assets/Logomark.png";
import SignOut from "../Assets/SignOut.png";
import { MdCopyright } from "react-icons/md";
import { Link,} from "react-router-dom";

import "./SignIN.scss";

function SignIN() {
  return (
    <div>
      <div className="SignIN">
        <div className="logo">
          <img src={Logomark} alt="logo" />
          <h1>Tripe</h1>
        </div>
        <h3>Sign In To Your Account</h3>
        <p>Unleash your inner sloth 4.0 right now.</p>
        <form>
          <label>Email Address</label>
          <div className="inputwrapper">
            <img src={EmailIcon} />
            <input type="email" placeholder="Enter your email" /> <br />
          </div>
          <label>Password</label>
          <div className="inputwrapper">
            <img src={PasswwordIcon} />
            <input type="password" placeholder="Enter your password" />
          </div>

          <div className="options">
            <span>
              <input type="checkbox" /> <label>Remember For 30Days</label>
            </span>
            <span>
              <Link to={"/ResetPassword"}> Forget Password </Link>
            </span>
          </div>
          <div>
            <a href="#" className="SignInBTN">
              <button className="BTN1">
                Sign In
                <img src={SignOut} alt="logo" className="SignOut" />
              </button>
            </a>
          </div>

          <p className="signuptext">
            Don't have an account? <Link to={"/"}><span>Sign Up</span></Link>
          </p> 

          <div className="hrwithtext">
            <hr /> 
            <span>OR</span>
            <hr /> 
          </div>

          <div className="socialmedia">
            <button>
              <img src={Facebookicon} alt="icon" /> Sign In With Google
            </button>
            <button>
              <img src={Twittericon} alt="icon" /> Sign In With Twitter
            </button>
          </div>
        </form>
      </div>
      <footer className="footer">
        <hr></hr>
        <div className="footercontent">
          <div className="copyright">
            <p>
              Copyright 2025 Tripe
            </p>
               <p> <MdCopyright /></p>
          </div>

          <div className="footerlinks">
            <div>
              <p>Privacy Policy</p>
            </div>
            <div>
              <p>Terms & Conditions </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  );
}

export default SignIN;
