package pack;

import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.parsers.DocumentBuilder;
import org.w3c.dom.Document;
import org.w3c.dom.NodeList;
import org.w3c.dom.Node;
import org.w3c.dom.Element;
import java.io.File;
import java.io.IOException;
import java.util.Scanner;
import javax.xml.parsers.ParserConfigurationException;
import org.xml.sax.SAXException;

public class Parser {

    public static void main(String[] argv) throws SAXException,
            IOException, ParserConfigurationException {

        File xmlFile = new File("C:/Users/H/Documents/eclipse-workspace/LabPrograms/src/pack/Users.xml");
       

        DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();
        DocumentBuilder dBuilder = factory.newDocumentBuilder();
        Document doc = dBuilder.parse(xmlFile);

        doc.getDocumentElement().normalize();
        int valid = 0;
       
        System.out.print("Enter User ID:");

        NodeList nList = doc.getElementsByTagName("user");
        Scanner scan = new Scanner(System.in);
        String num = scan.nextLine();

        System.out.println("===================================");
        for (int i = 0; i < nList.getLength(); i++) {
            Node nNode = nList.item(i);
            Element elem = (Element) nNode;
            String uid = elem.getAttribute("id");
            if (num.equals(uid)) {
            if (nNode.getNodeType() == Node.ELEMENT_NODE) {
            valid = 1;
                    Node node1 = elem.getElementsByTagName("username").item(0);
                    String name = node1.getTextContent();

                    Node node2 = elem.getElementsByTagName("address").item(0);
                    String address = node2.getTextContent();

                    Node node3 = elem.getElementsByTagName("phone").item(0);
                    String phone = node3.getTextContent();

                    Node node4 = elem.getElementsByTagName("email").item(0);
                    String email = node4.getTextContent();

                    System.out.printf("User Id: %s%n", uid);
                    System.out.printf("User Name: %s%n", name);
                    System.out.printf("Address: %s%n", address);
                    System.out.printf("Mobile Number: %s%n", phone);
                    System.out.printf("Email: %s%n", email);
                }
            }
        }
        if (valid == 0) {
        System.out.println("User Is Not Available");
        }
    }
    }