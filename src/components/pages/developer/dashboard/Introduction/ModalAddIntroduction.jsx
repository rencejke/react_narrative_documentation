import React from 'react'
import { LiaTimesSolid } from 'react-icons/lia'
import { Formik, Form } from 'formik'
import { InputFileUpload, InputSelect, InputText, InputTextArea } from '../../../../helpers/FormInputs'
import SpinnerButton from '../../../../partials/spinners/SpinnerButton'
import { setError, setIsAdd, setMessage, setSuccess } from '../../../../../store/StoreAction'
import { StoreContext } from '../../../../../store/StoreContext'
import * as Yup from 'yup'
import { useMutation, useQueryClient } from '@tanstack/react-query'
import { queryData } from '../../../../helpers/queryData'
import ModalWrapper from '../../../../partials/ModalWrapper'
import useUploadPhoto from '../../../../custom-hook/useUploadPhoto'
import { devBaseImgUrl } from '../../../../helpers/functions-general'
import useQueryData from '../../../../custom-hook/useQueryData'
import { motion } from 'framer-motion'

const ModalAddIntroduction = ({itemEdit, position}) => {
    const {store, dispatch} = React.useContext(StoreContext)
    const handleClose = () => dispatch(setIsAdd(false));

    const queryClient = useQueryClient();
    const mutation = useMutation({
        mutationFn: (values) =>
        queryData(
            itemEdit ? `/v1/intro/${itemEdit.intro_aid}` :`/v1/intro`,
            itemEdit ? "put" : "post",
            values
        ),
   
        onSuccess: (data) => {
        queryClient.invalidateQueries({ queryKey: ["intro"] });
        if (data.success) {
            dispatch(setIsAdd(false));
            dispatch(setSuccess(true));
            dispatch(setMessage(`Successfuly updated.`));
        } else {
            dispatch(setError(true));
            dispatch(setMessage(data.error));
        } 
        },
    });


    
     const initVal  = {
          intro_article : itemEdit ? itemEdit.intro_article : "",   
          intro_publish_date : itemEdit ? itemEdit.intro_publish_date : "",   
     }
       

     const yupSchema = Yup.object({
  
        intro_article: Yup.string().required("Required"),
        intro_publish_date: Yup.string().required("Required"),

     })

  return (
    <div>
      <ModalWrapper position={position}>
      <motion.div className="main-modal w-[900px] bg-secondary text-black"
      initial={{ opacity: 0, y:"50px" }}
      animate={{ opacity: 1, y:"0"}}
      exit={{ opacity: 0, y:"50px" }}
      >
                <div className="modal-header p-4 relative">
                    <h2>New Student</h2>
                    <button className='absolute top-[25px] right-4' onClick={handleClose}><LiaTimesSolid/></button>
                </div>
                <div className="modal-body p-4">
                    <Formik
                          initialValues={initVal}
                          validationSchema={yupSchema}
                          onSubmit={async (values, { setSubmitting, resetForm }) => {
                            // mutate data
                            mutation.mutate(values);
                          }}
                    >
                        {(props) => {
                            return (
                            <Form  className='flex flex-col'>
                                 {/* h-[calc(100vh-110px)] */}
                        <div className='grow overflow-y-auto'>
                     

                    <div className="grid grid-cols-[1fr_2fr] gap-10">
                        <div className="left">
    
                        <div className="input-wrap">
                        <InputText
                                label="Publish Date"
                                type="date"
                                name="intro_publish_date"
                            />
                        </div>
                        </div>

                         <div className="right">
                         <div className="input-wrap">
                          <InputTextArea
                                label="Article"
                                type="text"
                                name="intro_article"
                                className='h-[22.5rem] resize-none'
                            />
                        </div>
                         </div>
                    </div>
                            
                        </div>

                        <div className='form-action max-w-[400px] ml-auto w-full'>
                            <button className='btn btn-form btn--accent' type="submit"> {mutation.isPending ? <SpinnerButton/> : "Add"}</button>
                            <button className='btn btn-form btn--cancel' type="button" onClick={handleClose} >Cancel</button>
                        </div>
                    </Form>)}}
                    
                    </Formik>
                </div>
        </motion.div>
    </ModalWrapper>
    </div>
  )
}

export default ModalAddIntroduction
