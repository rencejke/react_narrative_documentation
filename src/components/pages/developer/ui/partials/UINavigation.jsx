import React from "react";
import { Link } from "react-router-dom";

const UINavigation = () => {
  return (
    <aside className="sticky top-0 w-[270px] h-screen bg-primary">
      <div className="nav-container">
        <div className="overflow-y-auto max-h-screen flex justify-between flex-col">
          <ul className="nav pl-16 pt-[100px] my-[70px] pr-4">
            <ul className="parent">
              <h3 className="mb-1">Preliminaries</h3>
              <Link to='/cover'>
                <li>Cover</li>
              </Link>
              <Link>
                <li>Resume</li>
              </Link>
              <Link>
                <li>Acknowledgement</li>
              </Link>
              <Link>
                <li>Summary</li>
              </Link>
              <Link>
                <li>Table of Contents</li>
              </Link>
              <Link>
                <li>Objective</li>
              </Link>
              <Link to='/introduction'>
                <li>Introduction</li>
              </Link>
              <Link>
                <li>Company Profile</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Weekly Report</h3>
              <Link to="/weeks">
                <li>Weeks</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Pictures Taken During OJT</h3>
              <Link to="/pictures">
                <li>Pictures</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Codes</h3>
              <Link to="/code">
                <li>React Install Guide</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Parent</h3>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Parent</h3>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Parent</h3>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Parent</h3>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Parent</h3>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Parent</h3>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Parent</h3>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Parent</h3>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Parent</h3>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Parent</h3>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Parent</h3>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Parent</h3>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
              <Link>
                <li>Child</li>
              </Link>
            </ul>
          </ul>
        </div>
      </div>
    </aside>
  );
};

export default UINavigation;
