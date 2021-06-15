require('./bootstrap');

import React from 'react';
import { render } from 'react-dom';
import { App } from '@inertiajs/inertia-react';
import { InertiaProgress } from '@inertiajs/progress';

const el = document.getElementById('app');

render(
    <App initialPage={JSON.parse(el.dataset.page)} resolveComponent={(name) => require(`./js/Pages/${name}`).default} />,
    el
);

InertiaProgress.init({ color: '#4B5563' });
