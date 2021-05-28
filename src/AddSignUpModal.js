import React,{Component} from 'react';
import {Modal,Button, Row, Col, Form,Image} from 'react-bootstrap';

export class AddSignUpModal extends Component{
    constructor(props){
        super(props);
        this.state={deps:[]};
        this.handleSubmit=this.handleSubmit.bind(this);
        this.handleFileSelected=this.handleFileSelected.bind(this);
    }

    photofilename = "anonymous.png";
    imagesrc = process.env.REACT_APP_PHOTOPATH+this.photofilename;

    componentDidMount(){
        fetch('http://localhost:53535/api/SignUp')
        .then(response=>response.json())
        .then(data=>{
            this.setState({deps:data});
        });
    }

    handleSubmit(event){
        event.preventDefault();
        fetch('http://localhost:53535/api/SignUp',{
            method:'POST',
            headers:{
                'Accept':'application/json',
                'Content-Type':'application/json'
            },
            body:JSON.stringify({
                Id:null,
                NameUser:event.target.NameUser.value,
                SurName:event.target.SurName.value,
                UserName:event.target.UserName.value,
                Email:event.target.Email.value,
                //ConfirmPassword:event.target.ConfirmPassword.value,
                Roli:event.target.Roli.value,
                //PasswordUser:event.target.PasswordUser.value,
                Sex:event.target.Sex.value,
                Birthday:event.target.Birthday.value,

            })
        })
        .then(res=>res.json())
        .then((result)=>{
            alert(result);
        },
        (error)=>{
            alert('Failed');
        })
    }


    handleFileSelected(event){
        event.preventDefault();
        this.photofilename=event.target.files[0].name;
        const formData = new FormData();
        formData.append(
            "myFile",
            event.target.files[0],
            event.target.files[0].name
        );

        fetch('http://localhost:53535/api/SignUp/SaveFile',{
            method:'POST',
            body:formData
        })
        .then(res=>res.json())
        .then((result)=>{
            this.imagesrc=process.env.REACT_APP_PHOTOPATH+result;
        },
        (error)=>{
            alert('Failed');
        })
        
    }

    render(){
        return (
            <div className="container">

<Modal
{...this.props}
size="lg"
aria-labelledby="contained-modal-title-vcenter"
centered
>
    <Modal.Header clooseButton>
        <Modal.Title id="contained-modal-title-vcenter">
            Registry
        </Modal.Title>
    </Modal.Header>
    <Modal.Body>

        <Row>
            <Col sm={6}>
                <Form onSubmit={this.handleSubmit}>
                    <Form.Group controlId="NameUser">
                        <Form.Label>Name</Form.Label>
                        <Form.Control type="text" name="NameUser" required 
                        placeholder="Name"/>
                    </Form.Group>
                    
                    <Form.Group controlId="SurName">
                        <Form.Label>SurName</Form.Label>
                        <Form.Control type="text" name="SurUser" required 
                        placeholder="Surname"/>
                    </Form.Group>
                    
                    <Form.Group controlId="UserName">
                        <Form.Label>Username</Form.Label>
                        <Form.Control type="text" name="UserName" required 
                        placeholder="Username"/>
                    </Form.Group>
                    <Form.Group controlId="Email">
                        <Form.Label>Email</Form.Label>
                        <Form.Control type="text" name="Email" required 
                        placeholder="Username"/>
                    </Form.Group>
                    <Form.Group controlId="Sex">
                        <Form.Label>Sex</Form.Label>
                        <Form.Control type="text" name="Sex" required 
                        placeholder="Sex"/>
                    </Form.Group>

                    <Form.Group controlId="Roli">
                        <Form.Label>Roli</Form.Label>
                        <Form.Control type="text" name="Roli" required 
                        placeholder="Roli"/>
                    </Form.Group>

                    <Form.Group controlId="Birthday">
                        <Form.Label>Birthday</Form.Label>
                        <Form.Control 
                        type="date"
                        name="Birthday"
                        required
                        placeholder="Birthday"
                        />
                       
                        
                    </Form.Group>

                    <Form.Group>
                        <Button variant="primary" type="submit">
                            Registry
                        </Button>
                    </Form.Group>
                </Form>
            </Col>

            <Col sm={6}>
                <Image width="200px" height="200px" src={this.imagesrc}/>
                <input onChange={this.handleFileSelected} type="File"/>
            </Col>
        </Row>
    </Modal.Body>
    
    <Modal.Footer>
        <Button variant="danger" onClick={this.props.onHide}>Close</Button>
    </Modal.Footer>

</Modal>

            </div>
        )
    }

}   