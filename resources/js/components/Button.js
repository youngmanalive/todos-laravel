import React from "react";
import styled from "@emotion/styled";

const Button = props => (
  <button {...props}>
    {props.children}
  </button>
);

const Btn = styled(Button)`
  padding: 5px 15px;
  margin: 5px;
  border: none;
  background: #dbedf3;
  border-radius: 3px;
  cursor: pointer;
  transition: all .2s;

  &:hover {
    background: lightblue;
  }

  &:disabled {
    background: lightgrey;
    cursor: default;
  }
`;

export default Btn;
