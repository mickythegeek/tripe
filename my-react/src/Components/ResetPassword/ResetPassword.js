import React from "react";
import Logomark from "../Assets/Logomark.png";
import PasswordIcon from "../Assets/Icon.png";
import EmailIcon from "../Assets/Icon (1).png";
import { SlArrowLeft } from "react-icons/sl";
import { RiLockPasswordLine } from "react-icons/ri";
import { Link } from "react-router-dom";
import { MdCopyright } from "react-icons/md";

import "./ResetStyle/Reset.scss";

function ResetPassword() {
  return (
    <div className="reset-page">
      <div className="ResetPassword">
        <div className="logo">
          <img src={Logomark} alt="logo" />
          <h1>Tripe</h1>
        </div>
        <h3 className="head"> Reset Your Password</h3>
        <p>
          Forgot your password? No worries, then let’s submit password reset. It
          will be send to your email..
        </p>
        <form>
          <label>Email Address</label>
          <div className="inputwrapper">
            <img src={EmailIcon} />
            <input type="email" placeholder="Enter your email" required /> <br />
          </div>
          <button type="submit" className="ResetBtn">
            Reset Password{" "}
            <RiLockPasswordLine
              style={{
                marginLeft: "5px",
                fontSize: "1em",
                verticalAlign: "middle",
              }}
            />
          </button>
          <div className="backtosignin">
            <Link to={"/"}>
              <SlArrowLeft
                style={{
                  marginRight: "5px",
                  fontSize: "1em",
                  verticalAlign: "middle",
                }}
              />
              Back to login screen
            </Link>
          </div>
        </form>
      </div>
        <footer className="footer">
          <hr></hr>
          <div className="footercontent">
            <div className="copyright">
              <p>Copyright 2025 Tripe</p>
              <p>
                {" "}
                <MdCopyright />
              </p>
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

export default ResetPassword;
