import React from 'react'
import { Link } from 'react-router-dom'
import { MdOutlineDashboard } from "react-icons/md";
import { AiOutlineMessage } from "react-icons/ai";
import Logo from './svg/Logo';



const Navigation = () => {

  const [activeLink, setActiveLink] = React.useState('');
  

  const handleLinkClick = (link) => {
    setActiveLink(() => link);
  };

  return (
    <aside className='px-4 py-6 w-[250px] text-primary h-screen border-r border-line'>
      <div className='flex items-center gap-4'>
        <Logo/>
        <h1 className='mb-0'>Clarence</h1>
      </div>
      
  
      <ul className='nav'>
      <li className={`nav-link ${activeLink === '/dashboard' ? 'active' : ''} `}>
          <Link to="/dashboard" onClick={() => handleLinkClick('/dashboard')}><MdOutlineDashboard />Dashboard</Link>
        </li>

        <li className={`nav-link ${activeLink === '/users' ? 'active' : ''}`}>
          <Link to="/dashboard/users" onClick={() => handleLinkClick('/dashboard/users')}><MdOutlineDashboard />Users</Link>
        </li>

        <li className={`nav-link ${activeLink === '/users' ? 'active' : ''}`}>
          <Link to="/dashboard/introduction" onClick={() => handleLinkClick('/dashboard/introduction')}><MdOutlineDashboard />Introduction</Link>
        </li>
       
      </ul>
    </aside>
  )
}

export default Navigation
