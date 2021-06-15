import React from "react";
import {InertiaLink} from '@inertiajs/inertia-react';


const Welcome = () => {
    return <div
        className="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div className="fixed top-0 right-0 px-6 py-4 sm:block">
            <InertiaLink href={route('/')} className="text-sm text-gray-700 underline">
                Inertial Link
            </InertiaLink>
        </div>
    </div>;
};

export default Welcome;