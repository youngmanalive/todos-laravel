import React from "react";

import App from "./App";
import stores from "../stores/store";
import { Provider } from "mobx-react";

const Root = () => (
  <Provider {...stores}>
    <App />
  </Provider>
);

export default Root;
