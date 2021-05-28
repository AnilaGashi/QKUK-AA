import React,{Component} from 'react';
import {Table} from 'react-bootstrap';

import {Button,ButtonToolbar} from 'react-bootstrap';
import {AddSignUpModal} from './AddSignUpModal';


export class SignUp extends Component{

    constructor(props){
        super(props);
        this.state={sgn:[], addModalShow:false, editModalShow:false}
    }

    refreshList(){
        fetch('http://localhost:53535/api/SignUp')
        .then(response=>response.json())
        .then(data=>{
            this.setState({sgn:data});
        });
    }

    componentDidMount(){
        this.refreshList();
    }

    componentDidUpdate(){
        this.refreshList();
    }

    render(){
        const {sgn,sid,sname,ssurname,susername,semail,sroli,ssex,sbirthday}=this.state;
        let addModalClose=()=>this.setState({addModalShow:false});
        
        return(
            <div >
                <Table className="mt-4" striped bordered hover size="sm">
                    <thead>
                        <tr>
                        <th>Id</th>
                            <th>Name</th>
                        <th>Surname</th>
                        <th>Username</th>
                        <th>Email</th>                      
                        <th>Roli</th>
                        <th>Sex</th>
                        <th>Birthday</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        {sgn.map(emp=>
                            <tr key={emp.Id}>
                                <td>{emp.Id}</td>
                                <td>{emp.NameUser}</td>
                                <td>{emp.Surname}</td>
                                <td>{emp.UserName}</td>
                                <td>{emp.Email}</td>                             
                                <td>{emp.Roli}</td>
                                <td>{emp.Sex}</td>
                                <td>{emp.Birthday}</td>
                                <td>
                                <ButtonToolbar>
                    <Button variant='primary'
                    onClick={()=>this.setState({addModalShow:true,
                        sid:emp.Id,sname:emp.NameUser,ssurname:emp.Surname,
                        semail:emp.Email,sroli:emp.Roli,ssex:emp.Sex,sbirthday:emp.Birthday})}>
                    Registry</Button>

                    <AddSignUpModal show={this.state.addModalShow}
                    onHide={addModalClose}/>

                <AddSignUpModal show={this.state.editModalShow} 
                        //onHide={editModalClose}
                        sid={sid}
                        sname={sname}
                        surname={ssurname}
                        susername={susername}
                        semail={semail}
                        sroli={sroli}
                        ssex={ssex}
                        sbirthday={sbirthday}
                        />
                </ButtonToolbar>
                                </td>

                            </tr>)}
                    </tbody>

                </Table>

                
            </div>
        )
    }
}