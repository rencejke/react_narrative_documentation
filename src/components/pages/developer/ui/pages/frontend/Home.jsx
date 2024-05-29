import React from "react";
import Footer from "../../partials/UIFooter";
import UINavigation from "../../partials/UINavigation";
import UIHeader from "./partials/UIHeader";
import UIMain from "./UIMain";
import UIFooter from "../../partials/UIFooter";
const Home = () => {
  return (
    <>
      <UIHeader />
      <div className="flex">
        <UINavigation />
        <UIMain />
      </div>
      <UIFooter />
    </>
  );
};

export default Home;
