/** @jsx jsx */
import { Fragment, Component } from "react";
import { observer, inject } from "mobx-react";
import { jsx, css } from '@emotion/core';
import Modal from "react-modal";
import Btn from "./Button";

Modal.setAppElement('#root');

const inputContainerStyle = css`
  max-width: 700px;
`;

const inputStyle = css`
  border: 1px solid grey;
  border-radius: 3px;
  padding: 10px;
  width: 100%;
  margin: 10px 5px;
`;

@inject('UIStore', 'TodosStore')
@observer
class TodoForm extends Component {
  handleSubmit = e => {
    e.preventDefault();
    const { title, description, clearFields } = this.props.UIStore;
    this.props.TodosStore.addTodo({ title, description })
      .then(clearFields);
  }

  render() {
    const { toggleModal, updateField, title, description, modalOpen } = this.props.UIStore;
    return (
      <Fragment>
        <Btn css={css`float: right;`} onClick={toggleModal}>Add Todo</Btn>
        <Modal isOpen={modalOpen}>
          <h1 css={css`font-size: 28px;`}>Add a Todo:</h1>
          <Btn css={css`position: absolute; right: 10px; top: 10px;`} onClick={toggleModal}>&times;</Btn>
          <form css={css`padding-top: 20px;`} onSubmit={this.handleSubmit}>
            <div css={inputContainerStyle}>
              <label htmlFor="title" css={css`margin: 0 5px;`}>Title:</label><br />
              <input type="text" id="title" css={inputStyle} onChange={updateField('title')} value={title} required />
            </div>
            <div css={inputContainerStyle}>
              <label htmlFor="desc" css={css`margin: 0 5px;`}>Description:</label><br />
              <input type="text" id="desc" css={inputStyle} onChange={updateField('description')} value={description} required />
            </div>
            <div><Btn type="submit">Add Todo</Btn></div>
          </form>
        </Modal>
      </Fragment>
    );
  }
};

export default TodoForm;