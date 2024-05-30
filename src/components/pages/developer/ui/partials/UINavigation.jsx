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
              <Link to='/introduction'>
                <li>Introduction</li>
              </Link>
              <Link>
                <li>Resume</li>
              </Link>
            </ul>
            <ul className="parent">
              <h3 className="mb-1">Weeks</h3>
              <Link to="/weeks">
                <li>Weeks</li>
              </Link>
              <Link>
                <li>Week 2</li>
              </Link>
              <Link>
                <li>Week 3</li>
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
