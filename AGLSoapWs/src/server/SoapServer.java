package server;


import metier.UserService;

import javax.xml.ws.Endpoint;



public class SoapServer
{
    public static void main(String[] args)
    {
        String url = "http://localhost:5500/";
    
        Endpoint.publish(url, new UserService());

        
		System.out.println("Le serveur a �t� d�marr� sur : "+ url+"UserService"+"?wsdl");
    }
}
