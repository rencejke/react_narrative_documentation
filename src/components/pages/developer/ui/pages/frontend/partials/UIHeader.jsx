import React from "react";
import Logo from "../../../partials/svg/Logo";
import { Link } from "react-router-dom";

const UIHeader = () => {
  return (
    <>
      <header className="fixed w-full bg-primary border-b border-line z-50">
        <div className="flex justify-between items-center px-8 h-[70px]">
          <div className="flex justify-center items-center">
            <div className="mr-2">
              <Logo />
            </div>
            <span className="font-bold">Motion</span>
          </div>
          <div>
            <Link>
              <button className="btn btn--border">Back to home</button>
            </Link>
          </div>
        </div>
      </header>
    </>
  );
};

export default UIHeader;
