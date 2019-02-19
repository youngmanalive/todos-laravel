/** @jsx jsx */
import { Component } from "react";
import { observer, inject } from "mobx-react";
import { jsx, css } from '@emotion/core';
import TodoListItem from "./TodoListItem";
import Btn from "./Button";


@inject('TodosStore', 'UIStore')
@observer
class TodoList extends Component {
  componentDidMount() {
    this.props.TodosStore.fetchTodos();
  }

  handleDelete = id => {
    this.props.TodosStore.deleteTodo(id);
  }

  toggleTodo = todo => {
    this.props.TodosStore.updateTodo(todo);
  }

  renderButtons = () => {
    const { filter, filterAll, filterComplete, filterIncomplete } = this.props.UIStore;

    return (
      <div>
        <span>Filter: </span>
        <Btn onClick={filterAll} disabled={filter === "all"}>All</Btn>
        <Btn onClick={filterComplete} disabled={filter === "complete"}>Complete</Btn>
        <Btn onClick={filterIncomplete} disabled={filter === "incomplete"}>Incomplete</Btn>
      </div>
    );
  }

  filterTodos = filter => {
    const { allTodos, completeTodos, incompleteTodos } = this.props.TodosStore;

    switch (filter) {
      case "all"        : return allTodos;
      case "complete"   : return completeTodos;
      case "incomplete" : return incompleteTodos;
    }
  }

  render() {
    const todoList = this.filterTodos(this.props.UIStore.filter);

    return (
      <div>
        {this.renderButtons()}
        <hr css={css`margin: 15px 0;`}/>
        <ul>
          { todoList.map((todo) => (
              <TodoListItem 
                key={todo.id}
                todo={todo} 
                handleDelete={this.handleDelete} 
                toggleTodo={this.toggleTodo}
              />
            ))
          }
        </ul>
      </div>
    );
  }
}

export default TodoList;