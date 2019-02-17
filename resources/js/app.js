import React from 'react';
import ReactDOM from 'react-dom';
import Root from './components/Root';

import stores from "./stores/store";
import { Provider } from 'mobx-react';

document.addEventListener('DOMContentLoaded', () => {
  require('./bootstrap');

  const root = document.getElementById('root');
  ReactDOM.render(
    <Provider {...stores} >
      <Root />
    </Provider>,
    root
  );
});
