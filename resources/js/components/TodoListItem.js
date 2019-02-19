/** @jsx jsx */
import { jsx, css } from '@emotion/core';
import Btn from "./Button";

const listStyle = css`
  margin: 20px 0;
  border: 1px solid lightgrey;
  border-radius: 3px;
  &:hover { border: 1px solid grey; }
`;

const headerStyle = css`
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #f3f3f3;
  padding: 10px;
`;

const titleStyle = css`
  font-size: 24px;
`;

const contentStyle = css`
  padding: 20px;
`;

const descriptionStyle = css`
  padding-bottom: 20px;
`;

const statusStyle = todo => css`
  color: ${todo.completed ? 'green' : 'red'};
  font-weight: bold;
`;

const TodoListItem = ({ todo, handleDelete, toggleTodo }) => (
  <li key={todo.id} css={listStyle}>
    <div css={headerStyle}>
      <h2 css={titleStyle}>{todo.title}</h2>
      <div>
        <Btn onClick={() => handleDelete(todo.id)}>Delete</Btn>
        <Btn onClick={() => toggleTodo(todo)}>Mark as {todo.completed ? 'Incomplete' : 'Complete'}</Btn>
      </div>
    </div>
    <div css={contentStyle}>
      <p css={descriptionStyle}>{todo.description}</p>
      <h4 css={statusStyle(todo)}>{todo.completed ? 'Complete' : 'Incomplete'}</h4>
    </div>
  </li>
);

export default TodoListItem;