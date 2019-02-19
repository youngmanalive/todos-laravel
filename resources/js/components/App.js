/** @jsx jsx */
import TodoFormModal from "./TodoFormModal";
import TodoList from "./TodoList";
import { jsx, css } from '@emotion/core';

const navContainerStyle = css`
  background: #2780E3;
  width: 100%;
`;

const navStyle = css`
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #FFFFFF;
  margin: auto;
  padding: 20px 30px;
  max-width: 1100px;
`;

const titleStyle = css`
  font-size: 40px;
`;

const linkStyle = css`
  &:hover { text-decoration: underline; }
`;

const contentStyles = css`
  max-width: 1000px;
  margin: auto;
  padding: 20px;
`;

const App = () => (
  <div>
    <div css={navContainerStyle}>
      <nav css={navStyle}>
        <h1 css={titleStyle}>Todos</h1>
        <a css={linkStyle} href="/">Home</a>
      </nav>
    </div>
    <div css={contentStyles}>
      <TodoFormModal />
      <TodoList />
    </div>
  </div>
);

export default App;
