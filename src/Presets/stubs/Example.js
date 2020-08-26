import React from 'react';
import ReactDOM from 'react-dom';

const Example = () => <div>
    <h1 className="text-3xl">Example Component</h1>
    <div className="text-grey-100">I'm an example component!</div>
</div>;

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example/>, document.getElementById('example'));
}
