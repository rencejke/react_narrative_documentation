import React from "react";
import { Link } from "react-router-dom";

const UIFooter = () => {
  return (
    <footer>
      <div className="py-6 border-t border-line flex justify-around items-center">
        <p className="mb-0 text-sm opacity-80">Copyright © 2022 Framer B.V.</p>
        <ul className="flex gap-8">
          <li className="text-sm opacity-50 hover:opacity-30">
            <Link>Cookies</Link>
          </li>
          <li className="text-sm opacity-50 hover:opacity-30">
            <Link>Security</Link>
          </li>
          <li className="text-sm opacity-50 hover:opacity-30">
            <Link>Terms of Service</Link>
          </li>
          <li className="text-sm opacity-50 hover:opacity-30">
            <Link>Privacy Statement</Link>
          </li>
        </ul>
      </div>
    </footer>
  );
};

export default UIFooter;
