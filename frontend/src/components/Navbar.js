import React from 'react'
import { Link } from 'react-router-dom'

const Navbar = () => {
  return (
    <div className=' p-3 flex justify-between bg-slate-200 shadow-sm'>
        <div className='flex items-center gap-2 lg:ml-16'>
            <h1 className='text-xl font-bold text-gray-600'>CookBOOK</h1>
            <span>|</span>
            <p className='font-semibold'>Welcome! Kithmina</p>
        </div>
        <div>
            <div>
                <ul className='flex justify-around gap-5 md:visible invisible font-semibold font-mono text-sm lg:mr-16'>
                    <li className=''><Link to="/">Home</Link></li>
                    <li><Link to="/recipedetails">Recipe Details</Link></li>
                    <li><Link to="/userprofile">User Profile</Link></li>
                </ul>
            </div>
        </div>
    </div>
  )
}

export default Navbar