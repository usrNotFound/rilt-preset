import React, {useEffect} from 'react';
import {InertiaLink} from '@inertiajs/inertia-react';

const Layout = ({title, children}) => {
    useEffect(() => {
        document.title = `${title} | Your Project title`;
    }, [title]);

    return <div className="flex min-h-screen">
        <nav className="flex flex-col bg-blue-800 text-blue-100 shadow-lg w-56">
            <div className="flex items-center justify-center px-10 h-16 shadow bg-blue-900">
                <h1 className="text-xl font-light leading-loose tracking-wide">
                    <InertiaLink href="/">Your Awesome Project</InertiaLink>
                </h1>
            </div>
            <NavItems/>
        </nav>
        <div className="flex-1 bg-gray-200">
            <div className="flex items-center justify-end bg-white h-16 shadow px-6">
                <div className="flex items-center">
                    <span>Awesome YOU</span>
                </div>
            </div>

            <div className="p-10 text-gray-900">
                {children}
            </div>

        </div>
    </div>;
};

export default Layout;
